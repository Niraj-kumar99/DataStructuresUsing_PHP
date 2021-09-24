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
}

//Creating an empty LinkedList
$MyLinkedList = new LinkedList();

//Adding first Node
$first = new Node();
$first->data = 10;
$first->next = null;
//Linking with head node.
$MyLinkedList->head = $first;

//Adding second node.
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;

//Adding third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with third node
$second->next = $third;

//Displaying
$MyLinkedList->printList();


?>