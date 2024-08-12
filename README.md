# toe1

TOE1 - Tic-Tac-Toe (I)

Description: Tic Tac Toe is a classic 3x3 grid game played by two players: X and O. Players take turns placing their symbols (X or O) in any unoccupied cell. The game ends when one player completes a line (vertical, horizontal, or diagonal) or the grid is full.

The objective of this problem is to determine if a given grid configuration could be a valid intermediate or final state of a Tic Tac Toe game.

Problem Statement: You need to evaluate a series of Tic Tac Toe grid configurations and determine if each configuration could be part of a valid game sequence, starting from an empty grid.

Input:

    The first line contains an integer N, the number of test cases.
    For each test case:
        There are exactly 3 lines, each containing 3 characters representing the grid.
        Characters can be X, O, or . (dot indicating an empty cell).
    Test cases are separated by a blank line.

Output:

    For each test case, print "yes" if the grid configuration could be a valid state in a Tic Tac Toe game; otherwise, print "no".

Example:

Input: 2 X.O OO. XXX

O.X XX. OOO

Output: yes no

Explanation:

    Test Case 1:
        Grid configuration: X.O OO. XXX
        This configuration is valid because X has won with a complete row.

    Test Case 2:
        Grid configuration: O.X XX. OOO
        This configuration is invalid because O has won with a complete row, but the count of X and O marks is not consistent with valid game progression.

Notes:

    Ensure that the grid configurations are validated according to the rules of Tic Tac Toe:
        The number of X and O marks should follow the game rules (X starts first).
        Only one player can win at a time.
        Validate that the number of moves and the winning conditions align with the sequence of a legitimate game.

