# Bowling game

The purpose of this exercise is to count the score for a bowling game.

Bowling score rules:

Normally score is the number of pins knock in each throw unless you achieve a spare or a strike.

Spare: all 10 pins knocked in 2 throws. The following throw will be added as bonus.

Strike: all 10 pins knocked in 1 throw. The 2 following throws will added as bonus.

The game consists of 10 frames, which each frame has 2 attempts to knock all the pins.


20 throws unless the last throw is a spare or strike, if so there will be a bonus throw.


## 1. Install dependencies

composer update

## 2. Create your specification phpspec

bin/phpspec desc BowlingGame

## 3. Run phpspec

bin/phpspec run

Start testing you application

## 4. Test

1. Test that all gutters (20 throws, 0 pins knocked)

    ```php
        $this->roll(0);
        $this->score()->shouldBe(0);
    ```

2.  Test that all are 1 (20 throws, 20 pins knocked)

3.  Test a spare

4. Test a strike

5. Test a perfect game.
