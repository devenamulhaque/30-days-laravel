<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "description" => "Develops, tests, and maintains software applications. A software engineer works with teams to create and optimize code, ensuring the final product meets the company's technical requirements. This role involves both front-end and back-end development, with a focus on solving problems through programming.",
                "salary" => "$90,000/year",
                "status" => "Full-time",
                "location" => "San Francisco, CA"
            ],
            [
                "id" => 2,
                "title" => "Data Scientist",
                "description" => "Analyzes complex data to help organizations make decisions. Data scientists use statistical analysis, machine learning, and algorithms to interpret large datasets. They work across multiple industries, turning data into actionable insights that help shape business strategies.",
                "salary" => "$110,000/year",
                "status" => "Full-time",
                "location" => "New York, NY"
            ],
            [
                "id" => 3,
                "title" => "Web Developer",
                "description" => "Builds and maintains websites and web applications. Web developers create user-friendly websites by integrating front-end and back-end technologies, ensuring the site’s responsiveness, security, and overall performance. They also fix bugs and enhance functionality over time.",
                "salary" => "$75,000/year",
                "status" => "Full-time/Contract",
                "location" => "Remote"
            ],
            [
                "id" => 4,
                "title" => "UX/UI Designer",
                "description" => "Designs intuitive user interfaces and enhances user experience. UX/UI designers focus on creating a seamless, engaging, and easy-to-navigate digital interface. Their work includes wireframing, prototyping, and usability testing to optimize the customer journey.",
                "salary" => "$80,000/year",
                "status" => "Full-time",
                "location" => "Los Angeles, CA"
            ],
            [
                "id" => 5,
                "title" => "Project Manager",
                "description" => "Manages project scope, timelines, and teams. Project managers are responsible for planning, overseeing, and closing projects on time and within budget. They coordinate between different teams and stakeholders to ensure the project aligns with the company’s objectives.",
                "salary" => "$95,000/year",
                "status" => "Full-time",
                "location" => "Chicago, IL"
            ],
            [
                "id" => 6,
                "title" => "Cybersecurity Analyst",
                "description" => "Protects systems and networks from cyber threats. A cybersecurity analyst monitors, detects, and prevents threats by implementing security measures and analyzing potential vulnerabilities in the organization’s infrastructure.",
                "salary" => "$100,000/year",
                "status" => "Full-time",
                "location" => "Austin, TX"
            ],
            [
                "id" => 7,
                "title" => "DevOps Engineer",
                "description" => "Automates and streamlines software development and IT operations. DevOps engineers work to improve efficiency by integrating development and operations teams, automating workflows, and setting up continuous integration and deployment pipelines.",
                "salary" => "$105,000/year",
                "status" => "Full-time",
                "location" => "Seattle, WA"
            ],
            [
                "id" => 8,
                "title" => "Cloud Architect",
                "description" => "Designs and oversees cloud infrastructure and services. Cloud architects develop cloud strategies and manage cloud environments to ensure secure and scalable infrastructure, aligning it with business needs and technical requirements.",
                "salary" => "$130,000/year",
                "status" => "Full-time",
                "location" => "Boston, MA"
            ],
            [
                "id" => 9,
                "title" => "AI Engineer",
                "description" => "Develops artificial intelligence models and algorithms. AI engineers design and implement AI systems using machine learning, deep learning, and natural language processing, applying them to various sectors like healthcare, finance, and technology.",
                "salary" => "$120,000/year",
                "status" => "Full-time",
                "location" => "Palo Alto, CA"
            ],
            [
                "id" => 10,
                "title" => "Mobile App Developer",
                "description" => "Develops mobile applications for iOS and Android platforms. Mobile app developers build and maintain apps that provide functionality on smartphones and tablets, ensuring compatibility across devices and optimizing performance.",
                "salary" => "$85,000/year",
                "status" => "Full-time",
                "location" => "Remote"
            ],
            [
                "id" => 12,
                "title" => "Digital Marketing Specialist",
                "description" => "Creates and implements digital marketing campaigns. Digital marketing specialists use online channels like social media, email, and search engines to reach target audiences, increase brand awareness, and drive conversions.",
                "salary" => "$70,000/year",
                "status" => "Full-time",
                "location" => "Miami, FL"
            ],
            [
                "id" => 12,
                "title" => "Business Analyst",
                "description" => "Analyzes business processes and identifies areas for improvement. Business analysts gather and interpret data to help organizations make informed decisions, optimize operations, and achieve strategic goals.",
                "salary" => "$90,000/year",
                "status" => "Full-time",
                "location" => "Denver, CO"
            ]
        ];
    }

    public static function find($id)
    {
        $job = Arr::first(self::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}