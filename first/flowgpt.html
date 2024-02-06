<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow Free Game</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #grid-container {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            grid-gap: 5px;
        }

        .cell {
            width: 50px;
            height: 50px;
            background-color: #eee;
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .color1 { background-color: #ff6666; }
        .color2 { background-color: #66ff66; }
        /* Add more colors as needed */

        .selected {
            border: 2px solid #333;
        }
    </style>
</head>
<body>

<div id="grid-container"></div>

<script>
    const gridSize = 5;
    const colors = ['#ff6666', '#66ff66']; // Add more colors as needed
    let selectedColor = null;
    let selectedCell = null;

    const gridContainer = document.getElementById('grid-container');

    // Create the grid
    for (let i = 0; i < gridSize; i++) {
        for (let j = 0; j < gridSize; j++) {
            const cell = document.createElement('div');
            cell.className = 'cell';
            cell.dataset.row = i;
            cell.dataset.col = j;
            cell.addEventListener('click', handleCellClick);
            gridContainer.appendChild(cell);
        }
    }

    function handleCellClick(event) {
        const clickedCell = event.target;
        const clickedColor = selectedColor;

        if (!selectedColor) {
            // First click, select color
            selectedColor = colors[Math.floor(Math.random() * colors.length)];
            clickedCell.classList.add('selected');
            selectedCell = clickedCell;
        } else if (clickedCell !== selectedCell && !clickedCell.classList.contains('selected')) {
            // Second click, connect cells
            const startRow = parseInt(selectedCell.dataset.row);
            const startCol = parseInt(selectedCell.dataset.col);
            const endRow = parseInt(clickedCell.dataset.row);
            const endCol = parseInt(clickedCell.dataset.col);

            if (isValidMove(startRow, startCol, endRow, endCol)) {
                connectCells(startRow, startCol, endRow, endCol, selectedColor);
                clearSelection();
            }
        }
    }

    function isValidMove(startRow, startCol, endRow, endCol) {
        // Add your validation logic here
        return true;
    }

    function connectCells(startRow, startCol, endRow, endCol, color) {
        // Add logic to connect cells (e.g., draw a line)
        console.log(`Connect cells from (${startRow}, ${startCol}) to (${endRow}, ${endCol}) with color ${color}`);
    }

    function clearSelection() {
        selectedCell.classList.remove('selected');
        selectedCell = null;
        selectedColor = null;
    }
</script>
<?php
echo "hello";

?>
</body>
</html>
