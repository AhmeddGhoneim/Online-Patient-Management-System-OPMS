<?php

namespace Modules\Admin\interfaces;

interface UserInterface {

    public function store($request);

    public function edit($id);

    public function update($id,$request);

    public function destroy($id);

}
