<?php
include 'Node.php';

class Queue {
    public $front;
    public $rear;

    //Add new node at rear end.
    public function enqueue($newEliment) {
        $newNode = new Node();
        $newNode->newEliment = $newEliment;
        $newNode->next = null;
        /*
         Check the queue is empty or not.
         if empty then new node is front and rear 
         for the queue.
        */
        if($this->front == null and $this->rear == null) {
            $this->front = $this->rear = $newNode;
        }
        //else add new node after rear node.
        else {
            $this->rear->next = $newNode;
            $this->rear = $newNode;
        }
    }

    public function printQueue(){
        $temp = new Node();
        $temp = $this->front;
        if($temp != null) {
            while($temp != null){
                echo $temp->data." ";
                $temp = $temp->next;
            }
        }
        else {
            echo "\n Queue is empty . ";
        }
    }
}

$myQueue = new Queue();
$myQueue->enqueue(10);
$myQueue->enqueue(20);
$myQueue->enqueue(30);
$myQueue->printQueue();
?>