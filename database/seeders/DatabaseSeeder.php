<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vulnerability;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Vulnerability::insert([
            [
                'title' => 'A01:2021-Broken Access Control',
                'description' => 'Broken Access Control moves up from the fifth position; 94% of applications were tested for some form of broken access control. The 34 Common Weakness Enumerations (CWEs) mapped to Broken Access Control had more occurrences in applications than any other category.',
                'url' => 'https://owasp.org/Top10/A01_2021-Broken_Access_Control',
                'year' => 2021
            ],
            [
                'title' => 'A02:2021-Cryptographic Failures',
                'description' => 'Cryptographic Failures shifts up one position to #2, previously known as Sensitive Data Exposure, which was a broad symptom rather than a root cause. The renewed focus is on failures related to cryptography, often leading to sensitive data exposure or system compromise.',
                'url' => 'https://owasp.org/Top10/A02_2021-Cryptographic_Failures',
                'year' => 2021
            ],
            [
                'title' => 'A03:2021-Injection',
                'description' => 'Injection slides down to the third position. 94% of applications were tested for some form of injection, and the 33 CWEs mapped into this category have the second most occurrences in applications. Cross-site Scripting is now part of this category in this edition.',
                'url' => 'https://owasp.org/Top10/A03_2021-Injection',
                'year' => 2021
            ],
            [
                'title' => 'A04:2021-Insecure Design',
                'description' => 'Insecure Design is a new category for 2021, focusing on risks related to design flaws. The focus includes threat modeling, secure design patterns, and reference architectures.',
                'url' => 'https://owasp.org/Top10/A04_2021-Insecure_Design',
                'year' => 2021
            ],
            [
                'title' => 'A05:2021-Security Misconfiguration',
                'description' => 'Security Misconfiguration moves up from #6 in the previous edition. 90% of applications were tested for some form of misconfiguration. This category now includes XML External Entities (XXE) and reflects the shift to highly configurable software.',
                'url' => 'https://owasp.org/Top10/A05_2021-Security_Misconfiguration',
                'year' => 2021
            ],
            [
                'title' => 'A06:2021-Vulnerable and Outdated Components',
                'description' => 'Vulnerable and Outdated Components was previously titled Using Components with Known Vulnerabilities. It is #2 in the Top 10 community survey, and its score includes a default exploit and impact weights due to the lack of mapped CVEs.',
                'url' => 'https://owasp.org/Top10/A06_2021-Vulnerable_and_Outdated_Components',
                'year' => 2021
            ],
            [
                'title' => 'A07:2021-Identification and Authentication Failures',
                'description' => 'Identification and Authentication Failures, previously known as Broken Authentication, slides down from the second position. This category now includes CWEs related to identification failures.',
                'url' => 'https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures',
                'year' => 2021
            ],
            [
                'title' => 'A08:2021-Software and Data Integrity Failures',
                'description' => 'Software and Data Integrity Failures is a new category for 2021, focusing on assumptions about software updates, critical data, and CI/CD pipelines without verifying integrity. Insecure Deserialization from 2017 is part of this category.',
                'url' => 'https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures',
                'year' => 2021
            ],
            [
                'title' => 'A09:2021-Security Logging and Monitoring Failures',
                'description' => 'Security Logging and Monitoring Failures, previously known as Insufficient Logging & Monitoring, moves up from #10. This category includes more types of failures and is critical for visibility, incident alerting, and forensics.',
                'url' => 'https://owasp.org/Top10/A09_2021-Security_Logging_and_Monitoring_Failures',
                'year' => 2021
            ],
            [
                'title' => 'A10:2021-Server-Side Request Forgery',
                'description' => 'Server-Side Request Forgery is added from the Top 10 community survey. The data shows a relatively low incidence rate but with above-average testing coverage and impact potential.',
                'url' => 'https://owasp.org/Top10/A10_2021-Server-Side_Request_Forgery',
                'year' => 2021
            ]
        ]);
    }
}
