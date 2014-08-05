<?php

namespace Drupal\AppConsole\Command;

class GeneratorFormConfigCommand extends GeneratorFormCommand {

  protected function configure()
  {
    parent::configure('ConfigFormBase', 'generate:form:config');
  }
}