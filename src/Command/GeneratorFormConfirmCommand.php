<?php

namespace Drupal\AppConsole\Command;

class GeneratorFormConfirmCommand extends GeneratorFormCommand {

  protected function configure(){
    parent::configure('generate:form:config');
  }
}