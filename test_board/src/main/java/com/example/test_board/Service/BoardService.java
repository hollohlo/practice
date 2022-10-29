package com.example.test_board.Service;

import com.example.test_board.Domain.Board;
import com.example.test_board.Mapper.BoardMapper;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@Service
@RequiredArgsConstructor
@Transactional(readOnly = true)
public class BoardService {
    private final BoardMapper boardMapper;

    public List<Board> BoardList(){
        return boardMapper.getList();
    }
    public Board getBoard(int boardId){
        return boardMapper.getBoard(boardId);
    }
    @Transactional
    public void uploadBoard(Board board){
        boardMapper.uploadBoard(board);
    }
    @Transactional
    public void updateBoard(Board board){
        boardMapper.updateBoard(board);
    }
    @Transactional
    public void deleteBoard(int boardId){
        boardMapper.deleteBoard(boardId);
    }
}
