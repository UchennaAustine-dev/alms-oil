<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
use App\Models\SiteSetting;
use App\Models\Testimonial;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ── Admin User ────────────────────────────────────────────────────────
        if (! AdminUser::where('email', 'admin@almsoil.com')->exists()) {
            AdminUser::create([
                'email'    => 'admin@almsoil.com',
                'password' => Hash::make('AlmsOil@2026!'),
                'name'     => 'Alms Oil Admin',
                'role'     => 'superadmin',
            ]);
            $this->command->info('✓ Admin user created  →  admin@almsoil.com  /  AlmsOil@2026!');
        } else {
            $this->command->info('✓ Admin user already exists, skipping.');
        }

        // ── Site Settings ─────────────────────────────────────────────────────
        $settings = [
            ['key' => 'hero_headline_1',       'value' => 'Powering Industry.',                             'label' => 'Hero Line 1',           'group' => 'hero'],
            ['key' => 'hero_headline_2',       'value' => 'Industry.',                                      'label' => 'Hero Line 2 (stroke)',  'group' => 'hero'],
            ['key' => 'hero_headline_3',       'value' => 'Building Trust.',                                'label' => 'Hero Line 3 (amber)',   'group' => 'hero'],
            ['key' => 'hero_subtext',          'value' => 'From sourcing and trading to storage, transport, and infrastructure — every stage of the value chain, managed with precision and integrity.', 'label' => 'Hero Body Text', 'group' => 'hero'],
            ['key' => 'stat_1_value',          'value' => '850M+',                                          'label' => 'Stat 1 Value',          'group' => 'stats'],
            ['key' => 'stat_1_label',          'value' => 'Litres Traded',                                  'label' => 'Stat 1 Label',          'group' => 'stats'],
            ['key' => 'stat_2_value',          'value' => '36',                                             'label' => 'Stat 2 Value',          'group' => 'stats'],
            ['key' => 'stat_2_label',          'value' => 'States Covered',                                 'label' => 'Stat 2 Label',          'group' => 'stats'],
            ['key' => 'stat_3_value',          'value' => '24/7',                                           'label' => 'Stat 3 Value',          'group' => 'stats'],
            ['key' => 'stat_3_label',          'value' => 'Operations',                                     'label' => 'Stat 3 Label',          'group' => 'stats'],
            ['key' => 'stat_4_value',          'value' => '100%',                                           'label' => 'Stat 4 Value',          'group' => 'stats'],
            ['key' => 'stat_4_label',          'value' => 'Quality Record',                                 'label' => 'Stat 4 Label',          'group' => 'stats'],
            ['key' => 'contact_phone',         'value' => '+234 (0) 800 ALMSOIL',                          'label' => 'Phone Number',          'group' => 'contact'],
            ['key' => 'contact_email',         'value' => 'info@almsoil.com',                               'label' => 'Email Address',         'group' => 'contact'],
            ['key' => 'contact_address_lagos', 'value' => 'Lagos Operational Hub & Terminal Network, Nigeria', 'label' => 'Lagos Address',      'group' => 'contact'],
            ['key' => 'contact_address_abuja', 'value' => 'Abuja Regional Office & Commercial Desk, Nigeria',  'label' => 'Abuja Address',      'group' => 'contact'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
        $this->command->info('✓ Site settings seeded');

        // ── Testimonials ──────────────────────────────────────────────────────
        $testimonials = [
            [
                'quote'   => 'Alms Oil has been our most reliable fuel supplier for over two years. Their ability to deliver on schedule — even during peak construction season — has been critical to keeping our sites operational and on budget.',
                'name'    => 'Engr. Chukwuemeka Obi',
                'role'    => 'Project Director',
                'company' => 'BuildRight Construction Group',
                'initial' => 'C',
                'order'   => 0,
            ],
            [
                'quote'   => 'What sets Alms Oil apart is their transparency. We know exactly what we\'re paying, exactly when delivery arrives, and exactly what quality standard we\'re getting. In this industry, that certainty is worth more than a low price.',
                'name'    => 'Mrs. Fatima Al-Hassan',
                'role'    => 'Head of Operations',
                'company' => 'Northern Manufacturing Consortium',
                'initial' => 'F',
                'order'   => 1,
            ],
            [
                'quote'   => 'From AGO procurement to emergency supply logistics, Alms Oil handles it all with professionalism. Their 24/7 dispatch capability saved our power plant during a critical outage. I recommend them without hesitation.',
                'name'    => 'Mr. Tunde Adeyemi',
                'role'    => 'Chief Operations Officer',
                'company' => 'Lagos Industrial Power Ltd',
                'initial' => 'T',
                'order'   => 2,
            ],
        ];

        foreach ($testimonials as $t) {
            if (! Testimonial::where('name', $t['name'])->exists()) {
                Testimonial::create($t);
            }
        }
        $this->command->info('✓ Testimonials seeded');

        $this->command->info('');
        $this->command->info('🎉  Seed complete.');
    }
}
