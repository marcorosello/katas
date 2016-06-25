<?php
require __DIR__ . '/../vendor/autoload.php';

class MinesweeperTest extends PHPUnit_Framework_TestCase {

    public function testFindOneMine() {
        $minesweeper = new \Minesweeper('O X');

        $this->assertSame($minesweeper->getScoreBoard(), '1 X');
    }

    public function testFindTwoMines() {

        $minesweeper = new \Minesweeper('X O X');

        $this->assertSame($minesweeper->getScoreBoard(), 'X 2 X');
    }

    public function testFindsMinesInTwoLines() {    
        $board = 'X O X' . PHP_EOL . 'X O X';


        $minesweeper = new \Minesweeper($board);
        $expected = 'X 4 X' . PHP_EOL . 'X 4 X';
        $this->assertSame($minesweeper->getScoreBoard(), $expected);
    }
}
