<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private array $projects = [];

    public function __construct()
    {
        // Base project data
        $this->projects = [
            'mount-street' => [
                'title' => 'Mount Street',
                'subtitle' => 'A showcase of precision, craftsmanship, and enduring design.',
                'hero' => 'images/projects/pdt-1.jpg',
                'feature' => 'images/projects/pdt-1.jpg',
                'description' => [
                    'Mount Street is a premium residential renovation located in Mayfair, London.',
                    'Kubik Construction oversaw every detail — modern elegance meets heritage authenticity.',
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Weeks Completion', 'value' => '6'],
                    ['label' => 'Square Feet', 'value' => '3,500'],
                    ['label' => 'Client Satisfaction', 'value' => '100%'],
                    ['label' => 'Snag List Items', 'value' => 'Zero'],
                ],
                'image' => 'pdt-1.jpg',
                'project_type' => 'completed', // Internal type for filtering (completed/upcoming)
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'ferncroft-avenue-house-1' => [
                'title' => 'Ferncroft Avenue – House 1',
                'subtitle' => 'Bright finishes and seamless modern comfort.',
                'hero' => 'images/projects/ferncroft-avenue-house-1/hero.jpg',
                'feature' => 'images/projects/pdt-1.jpg',
                'description' => [
                    'A refined transformation of a detached family home.',
                    'Features custom joinery, natural stone, and modern architecture.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Weeks Completion', 'value' => '8'],
                    ['label' => 'Square Feet', 'value' => '4,200'],
                    ['label' => 'Client Satisfaction', 'value' => '98%'],
                    ['label' => 'Snag List Items', 'value' => '2'],
                ],
                'image' => 'project-2.jpg',
                'project_type' => 'completed',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'eccleston-square' => [
                'title' => 'Eccleston Square',
                'subtitle' => 'Victorian aesthetic with modern elegance.',
                'hero' => 'images/projects/eccleston-square/hero.jpg',
                'feature' => 'images/projects/eccleston-square/feature.jpg',
                'description' => [
                    'Grade II listed full renovation in Belgravia.',
                    'Custom interiors, curated finishes and modern lighting.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Weeks Completion', 'value' => '10'],
                    ['label' => 'Square Feet', 'value' => '3,000'],
                    ['label' => 'Client Satisfaction', 'value' => '97%'],
                    ['label' => 'Snag List Items', 'value' => 'Few'],
                ],
                'image' => 'project-3.jpg',
                'project_type' => 'completed',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'ellerby-street' => [
                'title' => 'Ellerby Street',
                'subtitle' => 'Light-filled layout optimized for family living.',
                'hero' => 'images/projects/ellerby-street/hero.jpg',
                'feature' => 'images/projects/ellerby-street/feature.jpg',
                'description' => [
                    'The project adds a basement, rear extension, and loft.',
                    'Premium construction quality and bespoke finishes throughout.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Weeks Completion', 'value' => '12'],
                    ['label' => 'Square Feet', 'value' => '3,600'],
                    ['label' => 'Client Satisfaction', 'value' => '99%'],
                    ['label' => 'Snag List Items', 'value' => '1'],
                ],
                'image' => 'project-4.jpg',
                'project_type' => 'completed',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'cadogan-gardens' => [
                'title' => 'Cadogan Gardens',
                'subtitle' => 'Edwardian charm meets modern sophistication.',
                'hero' => 'images/projects/cadogan-gardens/hero.jpg',
                'feature' => 'images/projects/cadogan-gardens/feature.jpg',
                'description' => [
                    'Restoration project using stone, plaster, and warmth.',
                    'Fusion of history and handcrafted modern elegance.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Weeks Completion', 'value' => '14'],
                    ['label' => 'Square Feet', 'value' => '4,500'],
                    ['label' => 'Client Satisfaction', 'value' => '100%'],
                    ['label' => 'Snag List Items', 'value' => 'Zero'],
                ],
                'image' => 'project-10.jpg',
                'project_type' => 'completed',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'nutley-terrace-2' => [
                'title' => 'Nutley Terrace – 2',
                'subtitle' => 'Contemporary sustainability in Belsize Park.',
                'hero' => 'images/projects/nutley-terrace-2/hero.jpg',
                'feature' => 'images/projects/nutley-terrace-2/feature.jpg',
                'description' => [
                    'Eco-friendly smart home with clean, minimal design.',
                    'Built with zero-carbon goals and future-ready features.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Estimated Completion', 'value' => 'Q1 2026'],
                    ['label' => 'Square Feet', 'value' => '3,200'],
                    ['label' => 'Status', 'value' => 'In Progress'],
                ],
                'image' => 'project-2.jpg',
                'project_type' => 'upcoming',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'ferncroft-avenue-house-5' => [
                'title' => 'Ferncroft Avenue – House 5',
                'subtitle' => 'Sister to House 1 with bold geometry and elegance.',
                'hero' => 'images/projects/ferncroft-avenue-house-5/hero.jpg',
                'feature' => 'images/projects/ferncroft-avenue-house-5/feature.jpg',
                'description' => [
                    'Custom brass finishes, walnut cabinetry, and large atrium.',
                    'Designed for light, warmth, and family functionality.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Estimated Completion', 'value' => 'Q2 2026'],
                    ['label' => 'Square Feet', 'value' => '3,800'],
                    ['label' => 'Planning Approved', 'value' => 'Yes'],
                ],
                'image' => 'project-4.jpg',
                'project_type' => 'upcoming',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
            'mornington-terrace' => [
                'title' => 'Mornington Terrace',
                'subtitle' => 'Bold new geometry above Camden rooftops.',
                'hero' => 'images/projects/mornington-terrace/hero.jpg',
                'feature' => 'images/projects/mornington-terrace/feature.jpg',
                'description' => [
                    'Architect-led build focuses on geometry and eco-efficiency.',
                    'Features an open plan, roof terraces, and light wells.'
                ],
                'gallery' => [],
                'stats' => [
                    ['label' => 'Estimated Completion', 'value' => 'Q3 2026'],
                    ['label' => 'Square Feet', 'value' => '4,000'],
                    ['label' => 'Sustainability Rating', 'value' => 'BREEAM Excellent'],
                ],
                'image' => 'project-3.jpg',
                'project_type' => 'upcoming',
                'type' => 'Residential',
                'place' => 'London, UK',
            ],
        ];

        // Dynamically generate gallery images for each project
        $this->assignGallery('mount-street', 11);
        $this->assignGallery('ferncroft-avenue-house-1', 8);
        $this->assignGallery('eccleston-square', 6);
        $this->assignGallery('ellerby-street', 7);
        $this->assignGallery('cadogan-gardens', 5);
        $this->assignGallery('nutley-terrace-2', 4);
        $this->assignGallery('ferncroft-avenue-house-5', 6);
        $this->assignGallery('mornington-terrace', 5);
    }

    private function assignGallery(string $slug, int $count): void
    {
        $this->projects[$slug]['gallery'] = [];
        for ($i = 1; $i <= $count; $i++) {
            $this->projects[$slug]['gallery'][] = "images/projects/{$slug}/pdt-{$i}.jpg";
        }
    }

    /**
     * Show the projects list page, returning full listing data
     */
    public function index()
    {
        $completedProjects = collect($this->projects)
            ->filter(fn($p) => $p['project_type'] === 'completed')
            ->map(fn($p, $slug) => [
                'title' => $p['title'],
                'slug' => $slug,
                'subtitle' => $p['subtitle'] ?? '',
                'desc' => $p['subtitle'] ?? '',
                'image' => $p['image'] ?? 'default.jpg',
                'place' => $p['place'] ?? '',
                'type' => $p['type'] ?? '',
                'gallery' => $p['gallery'] ?? [],
                'stats' => $p['stats'] ?? [],
                'description' => $p['description'] ?? [],
                'hero' => $p['hero'] ?? '',
                'feature' => $p['feature'] ?? '',
            ])->values();

        $upcomingProjects = collect($this->projects)
            ->filter(fn($p) => $p['project_type'] === 'upcoming')
            ->map(fn($p, $slug) => [
                'title' => $p['title'],
                'slug' => $slug,
                'subtitle' => $p['subtitle'] ?? '',
                'desc' => $p['subtitle'] ?? '',
                'image' => $p['image'] ?? 'default.jpg',
                'place' => $p['place'] ?? '',
                'type' => $p['type'] ?? '',
                'gallery' => $p['gallery'] ?? [],
                'stats' => $p['stats'] ?? [],
                'description' => $p['description'] ?? [],
                'hero' => $p['hero'] ?? '',
                'feature' => $p['feature'] ?? '',
            ])->values();

        return view('pages.projects', compact('completedProjects', 'upcomingProjects'));
    }

    public function show(string $slug)
    {
        if (!isset($this->projects[$slug])) {
            abort(404);
        }

        $project = $this->projects[$slug];

        return view('pages.projects.project-detail', compact('project', 'slug'));
    }
}
