<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\BaseModels\Tests;

use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use BrokeYourBike\BaseModels\BaseUuid;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class BaseUuidTest extends \Orchestra\Testbench\TestCase
{
    /** @test */
    public function fixture_extends_base()
    {
        $parent = get_parent_class(BaseUuidModelFixture::class);
        $this->assertSame(BaseUuid::class, $parent);
    }

    /** @test */
    public function it_uses_uuid(): void
    {
        $usedTraits = class_uses(BaseUuid::class);
        $this->assertArrayHasKey(Uuid::class, $usedTraits);
    }

    /** @test */
    public function it_extends_eloquent_model(): void
    {
        $parent = get_parent_class(BaseUuid::class);
        $this->assertSame(Model::class, $parent);
    }

    /** @test */
    public function it_uses_milliseconds_in_date_format()
    {
        $model = new BaseUuidModelFixture();
        $this->assertSame('Y-m-d H:i:s.u', $model->getDateFormat());
    }

    /** @test */
    public function it_has_string_key_type()
    {
        $model = new BaseUuidModelFixture();
        $this->assertSame('string', $model->getKeyType());
    }

    /** @test */
    public function it_uses_not_incrementing_ids()
    {
        $model = new BaseUuidModelFixture();
        $this->assertSame(false, $model->getIncrementing());
    }

    /** @test */
    public function it_does_not_guard_attributes_by_default()
    {
        $model = new BaseUuidModelFixture();
        $this->assertSame([], $model->getGuarded());
    }
}
