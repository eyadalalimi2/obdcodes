<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\User;
use App\Models\Page;
use App\Models\ObdCode;

class DashboardController extends Controller
{
    public function index()
    {
    // إضافة عدّ الأكواد حسب الفئة
    $countP = ObdCode::where('category', 'P')->count();
    $countC = ObdCode::where('category', 'C')->count();
    $countB = ObdCode::where('category', 'B')->count();
    $countU = ObdCode::where('category', 'U')->count();
        return view('admin.dashboard', [
            'usersCount' => \App\Models\User::count(),
            'postsCount' => \App\Models\Post::count(),
            'obdCodesCount' => \App\Models\ObdCode::count(),
            'pagesCount' => \App\Models\Page::count(),
            'recentActivities' => \App\Models\ActivityLog::latest()->limit(5)->get(),
            'countP' => $countP,
            'countC' => $countC,
            'countB' => $countB,
            'countU' => $countU,
        ]);
    }
}
