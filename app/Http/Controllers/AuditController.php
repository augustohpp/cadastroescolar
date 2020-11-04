<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class AuditController extends Controller
{
    public function audit()
    {
        $audits = Audit::orderBy('created_at', 'DESC')->get();
        $users = User::get();
        return view('audit.atividades', compact('audits', 'users'));
    }

    public function infoAudit($id)
    {
        $users = User::get();
        $audit = Audit::find($id);
        return view('audit.infoAudit', compact('audit','users'));
    }
}
