# TRT - Treats for the Cows

#dynamic-programming

FJ has purchased N (1 <= N <= 2000) yummy treats for the cows who get money for giving vast amounts of milk. FJ sells one treat per day and wants to maximize the money he receives over a given period time. The treats are interesting for many reasons:

* The treats are numbered 1..N and stored sequentially in single file in a long box that is open at both ends. On any day, FJ can retrieve one treat from either end of his stash of treats.
* Like fine wines and delicious cheeses, the treats improve with age and command greater prices.
* The treats are not uniform: some are better and have higher intrinsic value. Treat i has value v(i) (1 <= v(i) <= 1000).
* Cows pay more for treats that have aged longer: a cow will pay v(i)*a for a treat of age a.

Given the values v(i) of each of the treats lined up in order of the index i in their box, what is the greatest value FJ can receive for them if he orders their sale optimally?

The first treat is sold on day 1 and has age a=1. Each subsequent day increases the age by 1.
## Input

Line 1: A single integer, N

Lines 2..N+1: Line i+1 contains the value of treat v(i)
## Output

The maximum revenue FJ can achieve by selling the treats
Example

```
Input:
5
1
3
1
5
2
```
```
Output:
43
```
