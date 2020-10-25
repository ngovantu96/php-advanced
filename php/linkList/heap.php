<?php 
// A PHP program to convert min Heap to max Heap 
  
// utlity swap function 
function swap(&$a,&$b) 
{ 
    $tmp=$a; 
    $a=$b; 
    $b=$tmp; 
} 
  
// to heapify a subtree with root at given index 
function MaxHeapify(&$arr, $i, $n) 
{ 
    $l = 2*$i + 1; 
    $r = 2*$i + 2; 
    $largest = $i; 
    if ($l < $n && $arr[$l] > $arr[$i]) 
        $largest = $l; 
    if ($r < $n && $arr[$r] > $arr[$largest]) 
        $largest = $r; 
    if ($largest != $i) 
    { 
        swap($arr[$i], $arr[$largest]); 
        MaxHeapify($arr, $largest, $n); 
    } 
} 
  
// This function basically builds max heap 
function convertMaxHeap(&$arr, $n) 
{ 
    // Start from bottommost and rightmost 
    // internal mode and heapify all internal 
    // modes in bottom up way 
    for ($i = (int)(($n-2)/2); $i >= 0; --$i) 
        MaxHeapify($arr, $i, $n); 
} 
  
// A utility function to print a given array 
// of given size 
function printArray($arr, $size) 
{ 
    for ($i = 0; $i <$size; ++$i) {
        echo $arr[$i]." "; 
    }
} 
  
    // Driver code 
  
    // array representing Min Heap 
    $arr = array(15, 5, 9, 6, 8, 20, 10, 12, 18, 9); 
    $n = count($arr); 
  
 echo "Min Heap array : ";
 echo "<pre>";
 printArray($arr, $n);
  
    convertMaxHeap($arr, $n); 
  
    echo "\nMax Heap array : ";
    echo "<pre>";
    print_r($arr); 
  
  