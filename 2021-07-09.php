<?php
/**
 *      Title:      2021-07-09.php
 *      Author:     Joe Cohen
 *      Contact:    <deskofjoe@gmail.com>
 *      GitHub:     https://github.com/cojohen
 * 
 *      PROBLEM:
 *      
 *      A unival tree (which stands for "universal value") is a tree 
 *      where all nodes under it have the same value.
 * 
 *      Given the root to a binary tree, count the number of unival 
 *      subtrees.
 * 
 *      For example, the following tree has 5 unival subtrees:
 *      
 *         0
 *        / \
 *       1   0
 *          / \
 *         1   0
 *        / \
 *       1   1
 * 
 */

 /**
  *     Class for binary tree node
  */
 class BinaryNode
 {
    public $value;
    public $left;
    public $right;

    public function ___construct(int $value = NULL){

        $this->value = $value;
        $this->left  = NULL;
        $this->right = NULL;
    }

    public function addChildren($left, $right){

        $this->left = $left;
        $this->right = $right;
    }
 }
/**
 *     Class for binary tree
*/
 class BinaryTree
 {
    private Node $root;

    public function __construct(){

        $this->root = NULL;
    }

    public function isEmpty(){

        return $this->root === NULL;
    }

    public function insert($nodeval){

        $node = new BinaryNode($nodeval);
        
        if($this->isEmpty()){
            
            $this->root = $node;
            
            return true;
        }else{

            return $this->insertNode($node, $this->root);

        }
    }

    private function insertNode($node, $currentRoot){

        if($currentRoot->left === NULL){
            $currentRoot->left = $node;
        }elseif($currentRoot->left < $node->value){
            $currentRoot->right = $currentRoot->left;
            $currentRoot->left = $node->value;
        }else{ $currentRoot->right = $node->value; }

        
    }


 }
?>