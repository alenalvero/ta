<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Mail;

class KirimEmail
{
  static function kirim_ke($email_penerima, $nama_penerima, $subject = '', $view, $data)
  {
    $to = $email_penerima;
    $reciver = $nama_penerima;
    $data = $data;

    Mail::send($view, $data, function ($message) use ($to, $reciver, $subject) {
      $message->to($to, $reciver)
        ->subject($subject);
    });

    return true;
  }
}
