<?php

namespace Database\Seeders;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [
            [
                'cid' => '1',
                'title' => 'Password',
                'type' => 'Error',
                'description' => 'Page load error',
                'comment' => 'Unsattisfied',
                'status' => 'Not seen',

            ],
            [
                'cid' => '1',
                'title' => 'Email',
                'type' => 'Email fault',
                'description' => 'Not received',
                'comment' => 'Not working',
                'status' => 'seen',
            ],
        ];

        foreach ($feedbacks as $feedback) {
            Feedback::create(array(
                'cid' => $feedback['cid'],
                'title' => $feedback['title'],
                'type' => $feedback['type'],
                'description' => $feedback['description'],
                'comment' => $feedback['comment'],
                'status' => $feedback['status'],
            ));
        }
    }
}

