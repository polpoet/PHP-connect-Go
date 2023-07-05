package sortcustom

import (
	"encoding/json"
)

type arrayList struct {
	InArr []int `json:"arr"`
}

func CustomSort(arrPrep []byte) []int {

	var InArrStruct arrayList
	json.Unmarshal(arrPrep, &InArrStruct)

	res := bubbleSort(InArrStruct.InArr)

	return res
}

// Bubble sorting for example simple not optimal
func bubbleSort(arr []int) []int {

	for i := 0; i < len(arr)-1; i++ {

		for j := 0; j < len(arr)-i-1; j++ {
			if arr[j] > arr[j+1] {
				arr[j], arr[j+1] = arr[j+1], arr[j]
			}
		}

	}

	return arr
}
