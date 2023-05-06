<?php
namespace Database\Seeders;

use App\Models\Contact;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $csv = Reader::createFromPath('./database/seeders/data/contacts.csv', 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        foreach($records as $record) {
            Contact::firstOrCreate(
                [
                    'phone' => $record['phone'],
                ],
                [
                    'name' => $record['name'],
                    'phone' => $record['phone'],
                    'email' => $record['email'],
                ]
            );
        }
    }
}
