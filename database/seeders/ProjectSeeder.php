<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::updateOrCreate([
            'title' => 'Bank Loan Analysis Dashboard',
            'description' => 'Interactive analysis of bank loan data exploring loan applications, approval patterns, customer characteristics, and financial performance.',
            'technologies' => 'Power BI, SQL, Data Analysis',
            'github_url' => 'https://github.com/Scribus01/bank-loan-analysis-powerbi-sql-2-RichardEkpadi-',
            'project_url' => null,
            'image' => 'projects/bank-loan.png',
        ]);

        Project::updateOrCreate([
            'title' => 'Amazon Customer Sentiment Analysis',
            'description' => 'Analysis of Amazon customer reviews to identify and understand positive, negative, and neutral customer sentiment.',
            'technologies' => 'Python, Pandas, Data Analysis, NLP',
            'github_url' => 'https://github.com/Scribus01/Amazon-Customer-Sentiment-Analysis',
            'project_url' => null,
            'image' => 'projects/amazon-sentiment.png',
        ]);

        Project::updateOrCreate([
            'title' => 'E-commerce Conversion Funnel Analysis',
            'description' => 'Analysis of an e-commerce conversion funnel to understand user behaviour, conversion rates, and customer drop-off across different stages.',
            'technologies' => 'Power BI, SQL, Data Analysis',
            'github_url' => 'https://github.com/Scribus01/E-commerce-Conversion-Funnel-Analysis-PowerBI-SQL',
            'project_url' => null,
            'image' => 'projects/ecommerce-funnel.png',
        ]);

        Project::updateOrCreate([
            'title' => 'Land Data Analysis',
            'description' => 'Data analysis project focused on exploring and extracting insights from land-related data.',
            'technologies' => 'Python, Data Analysis',
            'github_url' => 'https://github.com/Scribus01/land-data-analysis',
            'project_url' => null,
            'image' => null,
        ]);

        Project::updateOrCreate([
            'title' => 'Bank Customer Churn Analysis',
            'description' => 'Analysis of bank customer data to investigate customer churn patterns and identify factors associated with customer retention.',
            'technologies' => 'Excel, Data Analysis',
            'github_url' => 'https://github.com/Scribus01/bank-customer-churn-analysis-excel',
            'project_url' => null,
            'image' => 'projects/bank-churn.png',
        ]);

        Project::updateOrCreate([
            'title' => 'GIS Survey Point Mapping',
            'description' => 'GIS mapping project involving the visualization and analysis of survey points using geographic information system tools.',
            'technologies' => 'QGIS, GIS, Spatial Data Analysis',
            'github_url' => 'https://github.com/Scribus01/GIS-Survey-Point-Mapping-QGIS',
            'project_url' => null,
            'image' => 'projects/gis-mapping.png',
        ]);

        Project::updateOrCreate([
            'title' => 'Supply Chain Survey Analysis',
            'description' => 'Academic analysis of supply chain survey data including data cleaning, descriptive statistics, Likert-scale analysis, and statistical analysis.',
            'technologies' => 'Python, Pandas, Excel, Data Analysis',
            'github_url' => 'https://github.com/Scribus01/supply-chain-survey-analysis',
            'project_url' => null,
            'image' => 'projects/supply-chain.png',
        ]);

        Project::updateOrCreate([
            'title' => 'Real Estate Market Trends Dashboard',
            'description' => 'Dashboard project focused on analysing real estate market data and presenting market trends through interactive visualizations.',
            'technologies' => 'Power BI, Data Analysis, Data Visualization',
            'github_url' => 'https://github.com/Scribus01/real-estate-market-trends-dashboard',
            'project_url' => null,
            'image' => 'projects/real-estate.png',
        ]);

        Project::updateOrCreate([
            'title' => 'Disease Watch Data ETL',
            'description' => 'Collaborative health-data project involving data extraction, transformation, and loading of disease surveillance data into a PostgreSQL-based backend.',
            'technologies' => 'Python, PostgreSQL, Supabase, ETL',
            'github_url' => null,
            'project_url' => null,
            'image' => null,
        ]);
    }
}