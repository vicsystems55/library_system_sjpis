<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

use App\BinaryTree;

use App\MatchingBonus;

use App\DirectReferral;

use App\Order;

use App\Notification;

use App\UserWallet;

class CalculateMatchingBonus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'matching_bonus:calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate matching bonus for due users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $eligibles = BinaryTree::where('legs', '11')->get();

        
        foreach ($eligibles as $eligible) {
            # code...
            $user_id = $eligible->user_id;

            $node = BinaryTree::where('user_id', $user_id)->first();
    
            $node_children = $node->children;
    
            if ($node_children[0]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[0]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $total_left_points = DirectReferral::whereIn('referree_id', $left_group_ids )->sum('referree_points');
    
                echo $total_left_points;
    
                
    
    
            }
    
            if ($node_children[0]->position == 'R') {
                # code...
    
                // $total_right_points 
    
                $right_node = $node_children[0]->user_code;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[0]);
    
                // echo 'second right=';
    
                $right_group_ids =  $right_group->pluck('user_id');
    
                $total_right_points = DirectReferral::whereIn('referree_id', $right_group_ids )->sum('referree_points');
    
                echo $total_right_points;
    
            }
    
    
            if ($node_children[1]->position == 'L') {
                # code...
                // $total_left_points 
    
                $left_node = $node_children[1]->id;
    
                $left_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'first left=';
    
                $left_group_ids = $left_group->pluck('user_id');
    
                $total_left_points = DirectReferral::whereIn('referree_id', $left_group_ids )->sum('referree_points');
    
                echo $total_left_points;
    
            }
    
            if ($node_children[1]->position == 'R') {
                # code...
    
                // $total_right_points 
    
                
                $right_node = $node_children[1]->user_code;
    
                $right_group = BinaryTree::descendantsAndSelf($node_children[1]);
    
                // echo 'second right=';
    
                $right_group_ids =  $right_group->pluck('user_id');
    
                $total_right_points = DirectReferral::whereIn('referree_id', $right_group_ids )->sum('referree_points');
    
                echo $total_right_points;
    
            }
    
            // echo $node_children[0]->position;
    
            $aggregate = min($total_left_points, $total_right_points);
    
            $total_bonus = ($aggregate * 10000)/700;
    
            $user_past_bonus  = UserWallet::where('user_id', $user_id)->where('description', 'Matching Bonus')->where('credit', 1)->sum('amount');
    
            $new_bonus = $total_bonus - $user_past_bonus;
    
    
            $matching_bonus = MatchingBonus::updateOrCreate([
                'owners_id' => $user_id,
            ],[
    
                'total_left_points' => $total_left_points,
                'total_right_points' => $total_right_points,
                'aggregate' => $aggregate,
                'new_bonus' => $new_bonus,
                'total_bonus' => $total_bonus,
                
            ]);
    
            if ($new_bonus > 0 ) {
                # code...
    
                UserWallet::Create([
                    'user_id' => $user_id,
                    'amount' => $new_bonus,
                    'description' => 'Matching Bonus',
                    'credit' => '1',
                ]);
    
                $user_notification = Notification::create([
                                    'user_id' => $user_id,
                                    'title' => 'Matching Bonus',
                                   
                                    'body' => 'You just gained NGN' .number_format($new_bonus, 2) .'from a new match on your tree',
                                ]);
            }
    
    
        }

        
        
    }
}
