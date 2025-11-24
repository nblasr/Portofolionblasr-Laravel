<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display portfolio homepage
     */
    public function index()
    {
        // Data portfolio yang akan dikirim ke view
        $data = [
            'name' => 'Nabila',
            'title' => 'Future Software Engineer & Tech Enthusiast',
            'description' => 'I enjoy learning, experimenting, and creating things that make people\'s lives easier. Passionate about creating elegant solutions to complex problems. Specialized in building modern web applications and innovative software solutions.',
            
            // Social Links
            'social' => [
                'github' => 'https://github.com/nblasr',
                'linkedin' => 'https://www.linkedin.com/in/nblasr/',
                'email' => 'nnnabilaaasr19@gmail.com',
            ],
            
            // About Section
            'about' => [
                'description' => 'I\'m a passionate software developer with a strong foundation in modern web technologies and a keen interest in creating innovative solutions that make a difference.',
                'journey' => 'My journey in tech has been driven by curiosity and a desire to continuously learn and grow. I believe in writing code that not only works but is also elegant, maintainable, and scalable.',
                'activities' => 'When I\'m not coding, you\'ll find me exploring new technologies, contributing to open-source projects, or sharing knowledge with the developer community.',
            ],
            
            // Skills
            'skills' => [
                'frontend' => ['React', 'TypeScript', 'Tailwind CSS', 'HTML5', 'Responsive Design'],
                'backend' => ['Node.js', 'MySQL', 'Database Design'],
                'tools' => ['Git', 'GitHub', 'VS Code', 'Visual Studio', 'Figma', 'Agile', 'Problem Solving', 'Team Collaboration', 'Debugging'],
                'languages' => ['C#', 'Java', 'PHP', 'JavaScript', 'TypeScript', 'HTML', 'CSS'],
                'learning' => ['Cybersecurity Basics', 'Deep Learning Fundamentals', 'API Security', 'System Design Basics'],
            ],
            
            // Projects
            'projects' => [
                [
                    'title' => 'ECommerce-NaFi',
                    'description' => 'A digital e-commerce platform built with C#, HTML, CSS, and JavaScript. Designed to provide a smooth online shopping experience with modern UI and efficient backend logic.',
                    'tech_stack' => ['C#', 'HTML', 'CSS', 'JavaScript'],
                    'github_url' => 'https://github.com/nblasr/ECommerce-NaFi',
                ],
                [
                    'title' => 'Portofolio-nblasr',
                    'description' => 'A personal portfolio website built with React, TypeScript, and Tailwind CSS. It showcases my projects, technical skills, and contact information in a clean and modern layout.',
                    'tech_stack' => ['React', 'TypeScript', 'Tailwind CSS', 'HTML', 'CSS'],
                    'github_url' => 'https://github.com/nblasr/Portofolio-nblasr',
                ],
            ],
            
            // Contact Info
            'contact' => [
                'email' => 'nnnabilaaasr19@gmail.com',
                'phone' => '+62 82189643675',
                'location' => 'Makassar, Indonesia',
            ],
        ];
        
        return view('welcome', $data);
    }
    
    /**
     * Display about page (optional - jika mau bikin page terpisah)
     */
    public function about()
    {
        return view('pages.about');
    }
    
    /**
     * Display projects page (optional)
     */
    public function projects()
    {
        return view('pages.projects');
    }
    
    /**
     * Display contact page (optional)
     */
    public function contact()
    {
        return view('pages.contact');
    }
}