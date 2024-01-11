<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "hallo selamat datang";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='logout'>Logout</a>";
    }
    function admin()
    {
        echo "hallo selamat datang di halaman admin";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function siswa()
    {
        echo "hallo selamat datang di halaman siswa";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function wakahubin()
    {
        echo "hallo selamat datangm di halaman wakahubin";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    function pembimbing()
    {
        echo "hallo selamat datang di halaman pembimbing";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='/logout'>Logout</a>";
    }
}
