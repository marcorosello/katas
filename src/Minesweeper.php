<?php

class Minesweeper {

    private $mineCount;
    private $mineBoard;

    public function __construct($mineBoard) {
        $this->mineBoard = explode(PHP_EOL, $mineBoard);
        foreach ($this->mineBoard as $row => $mines) {
            $cells = explode(' ', $mines);
            $this->mineBoard[$row] = $cells;
            $this->mineCount[$row] = array_pad([], count($cells), 0);
        }
    }

    public function getScoreBoard() {
        foreach ($this->mineBoard as $row => $cells) {
            foreach ($cells as $column => $cell) {
                if ($this->isMine($cell)) {
                    $this->addCounts($row, $column);
                }
            }
        }

        return $this->renderBoard();
    }

    private function addCounts($mineRow, $mineColumn) {
        $this->setMine($mineRow, $mineColumn);

        foreach ($this->getNeighbours($mineRow, $mineColumn) as $neighbour) {
            $this->addCountToCell($neighbour['row'], $neighbour['column']);
        }
    }

    private function addCountToCell($row, $column) {
        if(
            isset($this->mineCount[$row][$column]) &&
            ! $this->isMine($this->mineCount[$row][$column])
        ) {
            $this->mineCount[$row][$column]++;
        }
    }

    private function renderBoard() {
        $result = [];
        foreach ($this->mineCount as $row) {
            $result[] = implode(' ', $row);
        }

        return implode(PHP_EOL, $result);
    }

    private function isMine($cell) {
        return $cell === 'X';
    }

    private function setMine($row, $column) {
        $this->mineCount[$row][$column] = 'X';
    }

    private function getNeighbours($row, $column) {
        $neighbours = [];
        $neighbours[] = ['row' => $row -1, 'column' => $column -1];
        $neighbours[] = ['row' => $row -1, 'column' => $column];
        $neighbours[] = ['row' => $row -1, 'column' => $column + 1];
        $neighbours[] = ['row' => $row, 'column' => $column -1];
        $neighbours[] = ['row' => $row, 'column' => $column];
        $neighbours[] = ['row' => $row, 'column' => $column + 1];
        $neighbours[] = ['row' => $row + 1, 'column' => $column -1];
        $neighbours[] = ['row' => $row + 1, 'column' => $column];
        $neighbours[] = ['row' => $row + 1, 'column' => $column + 1];

        return $neighbours;
    }
}
