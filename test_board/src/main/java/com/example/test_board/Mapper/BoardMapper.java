package com.example.test_board.Mapper;

import com.example.test_board.Domain.Board;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface BoardMapper {
    List<Board> getList();
    Board getBoard(int boardId);
    void uploadBoard(Board board);
    void updateBoard(Board board);
    void deleteBoard(int boardId);
}
