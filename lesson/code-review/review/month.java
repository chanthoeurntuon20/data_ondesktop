package com.review;

public class month {
	public static int dayOfYear(int month, int dayOfMonth, int year) {
		int[] dayMonth = new int[]{31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
		int months;
		for (int i = 0; i < month -1; i++) {
			//System.out.println(daysOfMonths[i]);
			dayOfMonth += dayMonth[i];		
		}
		return dayOfMonth;
		}
}
