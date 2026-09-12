<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolioData = config('portfolio');

        if (!$portfolioData || !is_array($portfolioData)) {
            $portfolioData = require config_path('portfolio.php');
        }

        return view('portfolio', [
            'personal' => $portfolioData['personal'] ?? [],
            'education' => $portfolioData['education'] ?? [],
            'experience' => $portfolioData['experience'] ?? [],
            'organization' => $portfolioData['organization'] ?? [],
            'skills' => $portfolioData['skills'] ?? [],
            'projects' => $portfolioData['projects'] ?? []
        ]);
    }
}
