<?php
 
use Illuminate\Database\Seeder;
use App\Event;
 
class AddDummyEvent extends Seeder
{
    public function run()
    {
        $data = [
                      ['title'=>'Event 1', 'start_date'=>'2018-04-11', 'end_date'=>'2018-04-12'],
                      ['title'=>'Event 2', 'start_date'=>'2018-04-11', 'end_date'=>'2018-04-13'],
                      ['title'=>'Event 3', 'start_date'=>'2018-04-14', 'end_date'=>'2018-04-14'],
                      ['title'=>'Event 3', 'start_date'=>'2018-04-17', 'end_date'=>'2018-04-17'],
                ];
 
        foreach ($data as $key => $value)
        {
          Event::create($value);
        }
    }
}
 
?>
