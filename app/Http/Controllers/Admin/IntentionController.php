<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyIntentionRequest;
use App\Http\Requests\StoreIntentionRequest;
use App\Http\Requests\UpdateIntentionRequest;
use App\Models\Intention;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IntentionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('intention_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $intentions = Intention::all();

        return view('admin.intentions.index', compact('intentions'));
    }

    public function create()
    {
        abort_if(Gate::denies('intention_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intentions.create');
    }

    public function store(StoreIntentionRequest $request)
    {
        $intention = Intention::create($request->all());

        return redirect()->route('admin.intentions.index');
    }

    public function edit(Intention $intention)
    {
        abort_if(Gate::denies('intention_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intentions.edit', compact('intention'));
    }

    public function update(UpdateIntentionRequest $request, Intention $intention)
    {
        $intention->update($request->all());

        return redirect()->route('admin.intentions.index');
    }

    public function show(Intention $intention)
    {
        abort_if(Gate::denies('intention_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.intentions.show', compact('intention'));
    }

    public function destroy(Intention $intention)
    {
        abort_if(Gate::denies('intention_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $intention->delete();

        return back();
    }

    public function massDestroy(MassDestroyIntentionRequest $request)
    {
        $intentions = Intention::find(request('ids'));

        foreach ($intentions as $intention) {
            $intention->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
