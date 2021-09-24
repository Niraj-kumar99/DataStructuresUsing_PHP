<?php
include 'Node.php';

class LinkedList {
    public $head;

    // Constructor to create empty LikedList
    public function __construct() {
        $this->head = null;
    }

    public function printList() {
        $temp = new Node();
        $temp = $this->head;
        if($temp != null) {
            echo $temp->data." ";
            $temp = $temp->next;
        }
        else {
            echo "\nThe list is empty.";
        }
    }
}

//Creating an empty LinkedList
$MyLinkedList = new LinkedList();

//Adding first Node
$first = new Node();
$first->data = 10;
$first->next = null;
//Linking with head node.
$MyLinkedList->head = $first;

//Displaying List
$MyLinkedList->printList();


?>