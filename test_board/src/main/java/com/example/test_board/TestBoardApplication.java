package com.example.test_board;

import org.mybatis.spring.annotation.MapperScan;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
@MapperScan(basePackages = "com.example.test_board")
public class TestBoardApplication {

	public static void main(String[] args) {
		SpringApplication.run(TestBoardApplication.class, args);
	}

}
