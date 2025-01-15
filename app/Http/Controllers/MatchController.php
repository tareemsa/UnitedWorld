<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Project;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    public function index()
    {
        return view('admin.match.index');
    }

    public function filter(Request $request)
    {
        $request->validate([
            'criteria' => 'required|array',
            'criteria.*' => 'string|in:rooms,sea_view,city,town,starting_price_usd',
        ]);
    
        $orders = Order::all();
        $projects = Project::all();
    

        $matchedOrders = collect();
        $matchedProjects = collect();
    
        foreach ($orders as $order) {
            foreach ($projects as $project) {
                $isMatched = true;
    
                foreach ($request->criteria as $criteria) {
                    switch ($criteria) {
                        case 'rooms':
                            if ($order->rooms !== $project->rooms) {
                                $isMatched = false;
                            }
                            break;
                        case 'sea_view':
                            if ($order->sea_view !== $project->sea_view) {
                                $isMatched = false;
                            }
                            break;
                        case 'city':
                            if ($order->city !== $project->city) {
                                $isMatched = false;
                            }
                            break;
                        case 'town':
                            if ($order->town !== $project->town) {
                                $isMatched = false;
                            }
                            break;
                        case 'starting_price_usd':
                            if ($order->starting_price_usd < $project->starting_price_usd) {
                                $isMatched = false;
                            }
                            break;
                    }
    
                    if (!$isMatched) {
                        break;
                    }
                }
    
                if ($isMatched) {

                    $matchedOrders->push($order);
                    $matchedProjects->push($project);
                }
            }
        }
    

        $matchedOrders = $matchedOrders->unique('id');
        $matchedProjects = $matchedProjects->unique('id');
    
        return view('admin.match.results', compact('matchedOrders', 'matchedProjects'));
    }
    
    

    
}
