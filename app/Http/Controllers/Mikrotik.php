<?php

namespace App\Http\Controllers;

use JonnyW\PhantomJs\Client;
use JonnyW\PhantomJs\DependencyInjection\ServiceContainer;
use RouterosAPI;

class Mikrotik extends Controller
{

    function __construct() {
        $this->client = new RouterosAPI();
        $this->client->debug = false;
        $this->client->connect(env('ROSIPADDRESS'), env('ROSUSERNAME'), env('ROSPASSWORD'));
    }

    public function index() {
//        dd(config('mikrotik'));
        return view('mikrotik.mikrotik');
    }

    public function dhcpleases() {
        $this->client->write('/ip/dhcp-server/lease/print');
        $READ = $this->client->read(false);
        $ARRAY = $this->client->parseResponse($READ);
        $this->client->disconnect();
        return view('mikrotik.dhcpleases', ['leases' => $ARRAY,]);
    }

    public function dnscache() {
        $this->client->write('/ip/dns/cache/print');
        $READ = $this->client->read(false);
        $ARRAY = $this->client->parseResponse($READ);
        $this->client->disconnect();
        return view('mikrotik.dns', ['dns' => $ARRAY,]);
    }

    public function dnsstatic() {
        $this->client->write('/ip/dns/static/print');
        $READ = $this->client->read(false);
        $ARRAY = $this->client->parseResponse($READ);
        $this->client->disconnect();
        return view('mikrotik.dns', ['dns' => $ARRAY,]);
    }

    public function interface() {
        $this->client->write('/interface/print');
        $READ = $this->client->read(false);
        $ARRAY = $this->client->parseResponse($READ);
        $this->client->disconnect();
        return view('mikrotik.interface', ['interface' => $ARRAY,  'rosipaddress' => config('mikrotik.rosipaddress'),]);
    }

    public function queue() {
        $this->client->write('/queue/simple/print');
        $READ = $this->client->read(false);
        $ARRAY = $this->client->parseResponse($READ);
        $this->client->disconnect();
        return view('mikrotik.simplequeue', ['queue' => $ARRAY, 'rosipaddress' => config('mikrotik.rosipaddress'),]);
    }

}
