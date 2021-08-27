// SPDX-License-Identifier: MIT
pragma solidity ^0.8.2;

import "@openzeppelin/contracts@4.3.0/token/ERC20/ERC20.sol";

contract Rizann is ERC20 {
    constructor() ERC20("Rizann", "RNZ") {
        _mint(msg.sender, 10000 * 10 ** decimals());
    }
}
