<?php

namespace App\Http\Controllers;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Http\Request;

class firebaseController extends Controller
{
    public function index()
    {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/yalabyna-2c149-firebase-adminsdk-y4txo-61aac5608a.json');
      $firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();
    $database = $firebase->getDatabase();
    $database->getReference('uesrs')->set(['username'=>'bahamovic','password'=>' bad']);
    echo "Succefull send ~!";
    }
}
