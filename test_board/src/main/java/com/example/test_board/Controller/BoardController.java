package com.example.test_board.Controller;

import com.example.test_board.Domain.Board;
import com.example.test_board.Service.BoardService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;

@Controller
@RequiredArgsConstructor
@RequestMapping("/board/**")
public class BoardController {
    private final BoardService service;

    @GetMapping("main")
    public String BoardList(Model model){
         model.addAttribute("list", service.BoardList());
         return "/board/main";
    }
    @GetMapping("view")
    public String viewBoard(Model model, int boardId){
        model.addAttribute("view", service.getBoard(boardId));
        return "/board/view";
    }
    @GetMapping("upload")
    public String uploadBoardForm(Model model){
        return "/board/upload";
    }
    @PostMapping("upload")
    public String uploadBoard(Board board){
        service.uploadBoard(board);
        return "redirect:/board/main";
    }
    @PutMapping("update")
    public String updateBoard(Board board){
        service.updateBoard(board);
        return "redirect:/board/main";
    }
    @DeleteMapping
    public String deleteBoard(int boardId){
        service.deleteBoard(boardId);
        return "redirect:/board/main";
    }
}
