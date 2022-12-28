<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Companie = Company::orderBy('id', 'desc')->paginate(5);
        $title ='CRUD | Company';
        return view('Company.index', compact('Companie', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Company.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:companies',
            'alamat' => 'required',
            'no_tlp' => ['required','max:12','unique:companies'],
            'umur' => ['required', 'min:1', 'max:3'],
            'jabatan' => 'required|unique:companies'
        ]);

        Company::create($request->post());

        return redirect()->route('Company.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('Company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('Company.edit', compact('company'));
        // @dd($company);
        // return view('Mahasiswa.edit', ['data' => $model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Responsep
     */
    public function update(Request $request, $id)
    {        
        $company = Company::find($id);
        $company->nama = $request->nama;
        $company->email = $request->email;
        $company->alamat = $request->alamat;
        $company->no_tlp= $request->no_tlp;
        $company->umur = $request->umur;
        $company->jabatan = $request->jabatan;
        $company->save();
        return redirect()->route('Company.index')->with('success', 'Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('Company.index')->with('success', 'Company has been deleted successfully');
    }
}
