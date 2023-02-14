<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\UserPasswordReset;
use App\Mail\PasswordResetMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class PasswordResetMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(User $user, UserPasswordReset $passwordResetMail): void
    {
        Mail::to($user)->send(new PasswordResetMail($passwordResetMail->hash));
    }
}
