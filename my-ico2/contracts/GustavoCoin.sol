pragma solidity ^0.4.13;

import '../../node_modules/zeppelin-solidity/contracts/token/MintableToken.sol';

contract GustavoCoin is MintableToken {
  string public name = "GUSTAVO COIN";
  string public symbol = "GUS";
  uint256 public decimals = 18;
}
