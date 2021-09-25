<?php
include 'Node.php';

class LinkedList {
    public $head;

    // Constructor to create empty LikedList
    public function __construct() {
        $this->head = null;
    }

    //Traversing the list.
    public function printList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
            while($temp != null) {
                echo $temp->data." ";
                $temp = $temp->next;
              }
        }
        else {
            echo "\nThe list is empty.";
        }
    }

    //Add new element at the end of the list
    public function push_back($newEliment) {
        $newNode = new Node();
        $newNode->data = $newEliment;
        $newNode->next = null;
        /* 
         Check the list is empty or not.
         if empty then making new node as head
         */
        if($this->head == null) {
            $this->head = $newNode;
        }
        // else traversing to the last node.
        else {
            $temp = new Node();
            $temp = $this->head;
            while($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }
}

//Creating an empty LinkedList
$myLinkedList = new LinkedList();

//Add eliments
$myLinkedList->push_back(10);
$myLinkedList->push_back(20);
$myLinkedList->push_back(30);
$myLinkedList->push_back(40);

//Displaying
$myLinkedList->printList();


?>