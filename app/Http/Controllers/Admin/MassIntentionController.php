<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMassIntentionRequest;
use App\Http\Requests\StoreMassIntentionRequest;
use App\Http\Requests\UpdateMassIntentionRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MassIntentionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mass_intention_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massIntentions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('mass_intention_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massIntentions.create');
    }

    public function store(StoreMassIntentionRequest $request)
    {
        $massIntention = MassIntention::create($request->all());

        return redirect()->route('admin.mass-intentions.index');
    }

    public function edit(MassIntention $massIntention)
    {
        abort_if(Gate::denies('mass_intention_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massIntentions.edit', compact('massIntention'));
    }

    public function update(UpdateMassIntentionRequest $request, MassIntention $massIntention)
    {
        $massIntention->update($request->all());

        return redirect()->route('admin.mass-intentions.index');
    }

    public function show(MassIntention $massIntention)
    {
        abort_if(Gate::denies('mass_intention_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.massIntentions.show', compact('massIntention'));
    }

    public function destroy(MassIntention $massIntention)
    {
        abort_if(Gate::denies('mass_intention_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $massIntention->delete();

        return back();
    }

    public function massDestroy(MassDestroyMassIntentionRequest $request)
    {
        $massIntentions = MassIntention::find(request('ids'));

        foreach ($massIntentions as $massIntention) {
            $massIntention->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
