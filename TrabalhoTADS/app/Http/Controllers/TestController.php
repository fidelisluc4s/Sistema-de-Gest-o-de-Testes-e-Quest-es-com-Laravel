<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();
        $tests = Test::all();
        return view('tests.index', compact('tests', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $test = Test::create($request->all());
        return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        $questions = Question::where('test_id', $test->id)->get();
        return view('tests.show', compact('test' , 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        return view('tests.update', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        $data = $request->all();
        $test->update($data);
        return redirect()->route('tests.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return redirect()->route('tests.index');
    }
}
