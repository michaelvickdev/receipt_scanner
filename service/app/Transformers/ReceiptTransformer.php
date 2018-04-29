<?php

namespace App\Transformers;

use App\Models\Receipt;
use League\Fractal\TransformerAbstract;

class ReceiptTransformer extends TransformerAbstract
{
    public function transform(Receipt $receipt)
    {
        return [
            'id'        => $receipt->uid,
            'userId'    => $receipt->userId,
            'data'      => $receipt->data,
            'createdAt' => (string) $receipt->created_at,
            'updatedAt' => (string) $receipt->updated_at,
        ];
    }
}
