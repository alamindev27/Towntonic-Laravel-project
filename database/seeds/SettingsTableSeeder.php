<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'Ministry of Taiwan',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'Ministry of Taiwan | All information about Taiwan | Ministry of Taiwan',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'helpdesktaiwangov@gmail.com',
        ],
        [
            'key'                       =>  'website_name',
            'value'                     =>  'www.taiwannocgov.com',
        ],
        [
            'key'                       =>  'noc_group',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'noc_group_website',
            'value'                     =>  'decohfweb.github.io',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  'Copyright © 2019 Ministry of Taiwan | All Rights Reserved',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
