<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;



class EmployeeController extends Controller
{
    private $employee;



    public function __construct () {


        

        $this->employee = new Client(['base_uri' => 'http://localhost:9379/employees/']);
        //$this->employee->setAuth('Admin', 'Pass1234');
        
        //$client = new Client();

        //$this->employee = $client->get('http://localhost:9379/Employees/');
        //$this->employee->setAuthorization('Admin', 'Pass1234');

        //$this->employee->auth(['auth' => ['Admin', 'Pass1234']]);
        //$this->employee->request('GET', 'http://localhost:9379/Employees/');

/*

        $client->request('GET', '/get', [
            'auth' => ['username', 'password', 'ntlm']
        ]);

        $baseURI = ['base_uri' => 'http://localhost:9379/Employees/'];
        $headers = [
            'Authorization' => ["Admin", "Pass1234"],        
            'Accept'        => 'application/json',
        ];

        $this->employee = new Client([$baseURI,$headers]);

      */


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $respuesta = $this->employee->get('');
        $cuerpo = $respuesta->getBody();
        return view('home', ['empleado' => json_decode($cuerpo)]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->employee->post('', [
            'json' => $request->all()
        ]);

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $respuesta = $this->employee->get($id);
        $cuerpo = $respuesta->getBody();
        return view('edit', ['employee' => json_decode($cuerpo)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->employee->put($id, [
            'json' => $request->all()
        ]);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $this->employee->delete($id);

        return redirect('/employee');
    }
}
