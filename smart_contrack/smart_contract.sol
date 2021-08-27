pragma solidity >=0.7.0 <0.9.0;

contract Fmssmartcontract{
    string[] public topic;
    
    struct Votetopic {
        string name;
        uint count;
        mapping(address => bool) voters;
    }
    
    mapping(string => Votetopic) public voteTopics;
    
    function addTopic(string memory _topicName)public{
        Votetopic storage _topic = voteTopics[_topicName];
        _topic.name = _topicName;
        _topic.count = 0;
        topic.push(_topicName);
    }
    
    function vote(string memory _topicName)public{
        Votetopic storage _topic = voteTopics[_topicName];
        require(!(_topic.voters[msg.sender] = true), 'This user already voted');
        _topic.count += 1;
        _topic.voters[msg.sender] = true;
    }
    
    function list() public view returns(string[] memory){
        return topic;
    }
    
}