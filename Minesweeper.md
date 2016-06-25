# Minesweeper

The purpose of this kata is to calculate the number of mines in the surrounding cells for every cell in the field.

## 1. Install dependencies

composer install

## 2. Create your specification phpspec

bin/phpspec desc Minesweeper

## 3. Run phpspec

bin/phpspec run

Start testing you application

## 4. Rules
Sample input:  
O O O O X O O O O O  
X X O O O O O O X O  
O O O O O O O O O O   
O O O O O O O O O O    
O O O O O X O O O O  

Sample output:   
2 2 1 1 X 1 0 1 1 1       
X X 1 1 1 1 0 1 X 1      
2 2 1 0 0 0 0 1 1 1       
0 0 0 0 1 1 1 0 0 0         
0 0 0 0 1 X 1 0 0 0      
