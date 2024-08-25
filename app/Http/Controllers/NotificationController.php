<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\OptedinPrograms; 
use App\Notifications\UnifiedNotification; // Import the UnifiedNotification class
use Auth;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        if ($request->wantsJson()) {
            $user = Auth::guard('customers')->user();
            $notifications = $user->notifications()->orderByDesc('created_at')->get();
            
            return response()->json([
                'notifications' => $notifications,
            ]);
        }

        $user = $request->user();
        $notifications = $user->notifications()->orderByDesc('created_at')->get();

        // If the request doesn't want JSON, you can return a view or something else
        return view('notifications.index', ['notifications' => $notifications]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        $companies = Company::all();
        //dd($roles);
       return view('notifications.create', compact('users', 'roles', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
// Import the OptedinProgram model
    

    public function store(Request $request)
    {
        $senderType = $request->input('sender_type');
        $title = $request->input('title');
        $message = $request->input('message');
        
        if ($senderType === 'app') {
            // Send the notification to program_users
            $userRole = 'program_user';
            $users = User::where('role', $userRole)->get();
        } elseif ($senderType === 'company') {
            // Send the notification to program_users of optedinPrograms of the company
            $companyId = $request->input('company_id');
            
            // Fetch users who have opted into programs from the company
            $users = User::whereHas('optedInPrograms', function ($query) use ($companyId) {
                $query->whereHas('program', function ($query) use ($companyId) {
                    $query->where('company_id', $companyId);
                });
            })->get();
        }
        
        // Create a single notification record and associate it with the users
        $notification = Notification::create([
            'title' => $title,
            'message' => $message,
            'sender_type' => $senderType
        ]);
        $notification->users()->sync($users);

        if ($senderType === 'app') {
            // Broadcast to all users
            Notification::send($users, new UnifiedNotification([
                'title' => $title,
                'message' => $message
            ], 'app'));
        } elseif ($senderType === 'company') {
            // Broadcast to company's optedinPrograms users
            Notification::send($users, new UnifiedNotification([
                'title' => $title,
                'message' => $message
            ], 'company'));
        }

        return response()->json([
            'message' => 'Notification created and sent successfully',
        ], 201);
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show($id){
        $notification = auth()->user()->notifications()->where('id', $id)->first();
        return view('notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }

    public function markAsRead(Request $request, Notification $notification)
    {
        $user = Auth::user();
        
        if ($notification->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $notification->update(['read' => true]);

        return response()->json(['message' => 'Notification marked as read']);
    }

    public function getUnreadCount()
    {
        // Assuming you have an authenticated user
        $user = Auth::guard('customers')->user();
        // Retrieve the count of unread notifications
        $unreadCount = $user->notifications()->where('read', false)->count();

        return response()->json([
            'unreadCount' => $unreadCount,
        ]);
    }
}
