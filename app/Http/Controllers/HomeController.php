<?php

namespace App\Http\Controllers;

use App\Mail\PDFMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Helpers\ApiHelper;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Tairot;
use App\Helpers\various;
use DB;

class HomeController extends Controller
{
    
}
